# static-webapp-builder
# NGINX PHP static webapp using DockerFile

# Building

$ docker build .

Build image from DockerFile

$ docker build -t yourusername/repository-name .

Tag image

$ docker images

Confirm image has been tagged

# Uploading

You need to log in with your Docker Hub username and password.

$ docker login

Retag the image with a version number:

$ docker tag yourusername/example-node-app yourdockerhubusername/example-node-app:v1

Then push with the following:

$ docker push yourdockerhubusername/example-node-app:v1
