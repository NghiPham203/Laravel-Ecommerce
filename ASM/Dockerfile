FROM ubuntu:latest
RUN apt-get update && apt-get install -y nginx
COPY . /app
CMD ["nginx", "-g", "daemon off;"]

