
# how to build:
docker   build  -t josefjebavy/webapp-test:latest .

# how to run it locally:
docker  run -p 80:80   -it  --rm   --name www   --env="VAR=loremimpus" josefjebavy/webapp-test:latest

