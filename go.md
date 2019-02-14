### 环境安装
按照菜鸟教程，下载dmg文件安装，安装默认目录在/usr/local/go目录下，安装完成后终端执行
```
export PATH=$PATH:/usr/local/go/bin
```
重启终端，执行go run xx.go就能执行了

### helloword
```go
package main

import "fmt"

func main(){
    fmt.Println("Hello World!")
}
```