# docker image with imapsync

# docker build ./ -t imapsync
# docker run  -v ${PWD}:/root/imapsync -it  --rm  imapsync   /bin/bash

FROM mageia:8

MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>



RUN urpmi imapsync
RUN mkdir /root/imapsync
WORKDIR /root/imapsync
COPY imapsync.sh input.csv server.sh ./
CMD  ./imapsync.sh

