from flask import Flask, render_template, Response
import cv2
import face_recognition
import numpy as np
import os
from datetime import datetime
app=Flask(__name__)
path = 'Images'
images = []
classNames = []
myList=os.listdir(path)
#print(myList)

for cl in myList:
    currImg=cv2.imread(f'{path}/{cl}')
    images.append(currImg)
    classNames.append(os.path.splitext(cl)[0])
#print(classNames)
def findEncodings(images):
    encodeList = []
    for img in images:
        img = cv2.cvtColor(img, cv2.COLOR_BGR2RGB)
        encode = face_recognition.face_encodings(img)[0]
        encodeList.append(encode)
    return encodeList
def markAttendance(name,date):
    with open('Attendance.csv', 'r+') as f:
        myDataList = f.readlines()
        nameList = []
        dateList=[]
        for line in myDataList:
            entry = line.split(',')
            dt=entry[0]
            nm=entry[1]
            dateList.append(dt)
            nameList.append(nm)
        #print(entry)
        if name not in nameList :
            now = datetime.now()
            dtString = now.strftime("%m/%d/%Y")
            dtTime=now.strftime("%H:%M:%S")
            f.writelines(f'\n{dtString},{name},{dtTime}')
        elif date not in dateList:
            now = datetime.now()
            dtString = now.strftime("%m/%d/%Y")
            dtTime=now.strftime("%H:%M:%S")
            f.writelines(f'\n{dtString},{name},{dtTime}')
        
            

encodeListKnown=findEncodings(images)
#print('Encoding Done')

camera = cv2.VideoCapture(0)

def gen_frames():  
    while True:
        success, frame = camera.read()  # read the camera frame
        if not success:
            break
        else:
            imgS=cv2.resize(frame,(0,0),None,0.25,0.25)
            imgS=cv2.cvtColor(imgS,cv2.COLOR_BGR2RGB)
            facesCurrFrame=face_recognition.face_locations(imgS)
            encodesCurrFrame=face_recognition.face_encodings(imgS,facesCurrFrame)

            for encodeFace,faceLoc in zip(encodesCurrFrame,facesCurrFrame):
                matches=face_recognition.compare_faces(encodeListKnown,encodeFace)
                faceDis=face_recognition.face_distance(encodeListKnown,encodeFace)
                #print(faceDis)
                matchIndex=np.argmin(faceDis)

                if faceDis[matchIndex]<0.50:
                    name=classNames[matchIndex].upper()
                    now=datetime.now()
                    date=now.strftime("%m/%d/%Y")
                    #print(name)
                    markAttendance(name,date)
                else:name='Unknown'
                y1,x2,y2,x1=faceLoc
                y1, x2, y2, x1 = y1*4, x2*4, y2*4, x1*4
                cv2.rectangle(frame,(x1,y1),(x2,y2),(0,255,0),2)
                cv2.rectangle(frame, (x1, y2 - 35), (x2, y2), (0, 255, 0), cv2.FILLED)
                cv2.putText(frame, name, (x1 + 6, y2 - 6), cv2.FONT_HERSHEY_COMPLEX, 1, (255, 255, 255), 2)
            ret, buffer = cv2.imencode('.jpg', frame)
            frame = buffer.tobytes()
            yield (b'--frame\r\n'
                   b'Content-Type: image/jpeg\r\n\r\n' + frame + b'\r\n')

@app.route('/')
def index():
    return render_template('index.html')
@app.route('/video_feed')
def video_feed():
    return Response(gen_frames(), mimetype='multipart/x-mixed-replace; boundary=frame')
if __name__=='__main__':
    app.run(debug=True)