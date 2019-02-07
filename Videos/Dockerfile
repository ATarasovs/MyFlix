FROM tomcat:7.0.82-jre8
RUN apt-get update && apt-get -y upgrade
WORKDIR /usr/local/tomcat
COPY videos/ /usr/local/tomcat/webapps/ROOT/videos
COPY thumbs/ /usr/local/tomcat/webapps/ROOT/thumbs
COPY images/ /usr/local/tomcat/webapps/ROOT/images
EXPOSE 8080