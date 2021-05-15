# docker image with imapsync

# docker build ./ -t imapsync
# docker run  -it  --rm  imapsync  /bin/bash

FROM mageia:8

MAINTAINER Bc. Josef Jebavý <email@josefjebavy.cz>



RUN urpmi imapsync

WORKDIR /root
COPY imapsync.sh input.csv server.sh ./

CMD  ./imapsync.sh

