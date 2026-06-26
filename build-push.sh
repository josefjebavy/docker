#!/bin/bash
dir=$(basename "$PWD")
name=josefjebavy/${dir}:latest
echo $name
docker buildx build --platform=linux/amd64,linux/arm64  -t ${name} .
docker push  ${name}

# for load image  to docker
docker buildx build --platform linux/amd64 -t ${name} --load . 
