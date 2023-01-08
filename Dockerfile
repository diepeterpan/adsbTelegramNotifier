FROM php
LABEL maintainer "Die Peter Pan <diepeterpan@gmail.com>"

RUN apt-get update && apt-get install -y curl selinux-policy-default systemd init bash nano

COPY . /usr/src/myapp
WORKDIR /usr/src/myapp

RUN ln -f -s /usr/src/myapp/adsbTelegramNotifierDocker.service /etc/systemd/system/adsbTelegramNotifierDocker.service
RUN systemctl enable adsbTelegramNotifierDocker 

CMD ["/sbin/init"]
