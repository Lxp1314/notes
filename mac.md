### VirtualBox 
安装Centos时，设置-系统-指点设备要改为usb多点触控板，不然系统安装时没有鼠标指针，很难操作

### 快捷键
> mac系统快捷键

| 快捷键 | 说明
| ----- | ---
| ctrl + space          | 切换输入法
| commant + R           | 浏览器刷新
| ctrl + commant + Q    | 锁定屏幕
| command + q           | 关闭窗口
| shift + command + q   | 注销
| command + delete      | 删除、已到废纸篓
| command + shift + del | 清空废纸篓
| F11 (+ fn)            | 显示桌面
| ctrl+command+f        | 全屏和退出全屏
| command + c           | 拷贝
| command + v           | 粘贴（复制粘贴）
| command + alt + v     | 粘贴（剪切粘贴）

> 终端快捷键

| 快捷键 | 说明
| ----- | ---
| ctrl + a              | 到行首（ahead）
| ctrl + e              | 到行位（end）

> VScode快捷键

| 快捷键 | 功能说明 | 自定义
| ----- | ------- | ----
| F1                    | 打开命令提示
| ctrl + `              | 打开关闭终端
| command + B           | 打开关闭侧边栏
| command + →           | 到行位
| command + ←           | 到行首
| command + T           | 快速切换到终端（T:terminal）| ✅
| command + E           | 快速切换到编辑器（E:editor）| ✅


### 使用技巧
三指上划会显示出桌面管理，创建桌面并拖动相应程序到这个桌面即可。也可在docker栏右键程序，弹出选项-分配给这个桌面，这样就永久设置了这个桌面，即使重启电脑也会停留在这个桌面。三指左右划切换桌面。

### VSCode配置
1. 配置中文语言：在插件管理里面安装Chinese (Simplified) Language Pack for Visual Studio Code插件，然后快捷键command+shift+P打开配置搜索，搜索language，找到Configure Display Language，修改locale修改为zh-cn，然后重启环境就可以了
2. 配置自动保存：在Code-首选项-设置中搜索Auto Save，在用户设置和工作区设置里面同时将文件的Files:Auto Save改为afterDelay，Auto Save Delay默认1000毫秒即可。

### 系统
//打印PATH变量
echo $PATH;
//将/usr/local/go/bin添加到PATH变量
export PATH=$PATH:/usr/local/go/bin
