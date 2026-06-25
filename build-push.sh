#!/bin/bash
name=$(basename "$PWD")
echo $name
docker buildx build --platform=linux/amd64,linux/arm64 . -t josefjebavy/${name}:latest
docker push  josefjebavy/${name}:lates
