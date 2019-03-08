# docker安装
wget -qO- https://get.docker.com | sh
增加运行权限给非root用户
sudo usermod -aG docker your-user
启动docker服务
systemctl start docker
配置docker国内镜像加速（如果php镜像拉不下来）
vi /etc/docker/daemon.json，加入{"registry-mirrors": ["http://9d4cd35f.m.daocloud.io"]}后保存
重启docker服务
systemctl restart docker

# docker-compose安装
curl -L https://github.com/docker/compose/releases/download/1.11.1/docker-compose-`uname -s`-`uname -m` > /usr/local/bin/docker-compose
增加运行权限
chmod +x /usr/local/bin/docker-compose
