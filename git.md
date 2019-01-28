# git所有命令
> git help -a

```
$ git help -a
usage: git [--version] [--help] [-C <path>] [-c name=value]
           [--exec-path[=<path>]] [--html-path] [--man-path] [--info-path]
           [-p | --paginate | --no-pager] [--no-replace-objects] [--bare]
           [--git-dir=<path>] [--work-tree=<path>] [--namespace=<name>]
           <command> [<args>]

available git commands in 'C:\Program Files\Git\mingw64/libexec/git-core'

  add                 gc                  receive-pack
  add--interactive    get-tar-commit-id   reflog
  am                  grep                remote
  annotate            gui                 remote-ext
  apply               gui--askpass        remote-fd
  archimport          gui--askyesno       remote-ftp
  archive             gui.tcl             remote-ftps
  askpass             hash-object         remote-http
  bisect              help                remote-https
  bisect--helper      http-backend        repack
  blame               http-fetch          replace
  branch              http-push           request-pull
  bundle              imap-send           rerere
  cat-file            index-pack          reset
  check-attr          init                rev-list
  check-ignore        init-db             rev-parse
  check-mailmap       instaweb            revert
  check-ref-format    interpret-trailers  rm
  checkout            log                 send-email
  checkout-index      ls-files            send-pack
  cherry              ls-remote           sh-i18n--envsubst
  cherry-pick         ls-tree             shortlog
  citool              mailinfo            show
  clean               mailsplit           show-branch
  clone               merge               show-index
  column              merge-base          show-ref
  commit              merge-file          stage
  commit-tree         merge-index         stash
  config              merge-octopus       status
  count-objects       merge-one-file      stripspace
  credential          merge-ours          submodule
  credential-manager  merge-recursive     submodule--helper
  credential-store    merge-resolve       subtree
  credential-wincred  merge-subtree       svn
  cvsexportcommit     merge-tree          symbolic-ref
  cvsimport           mergetool           tag
  daemon              mktag               unpack-file
  describe            mktree              unpack-objects
  diff                mv                  update
  diff-files          name-rev            update-index
  diff-index          notes               update-ref
  diff-tree           p4                  update-server-info
  difftool            pack-objects        upload-archive
  difftool--helper    pack-redundant      upload-pack
  fast-export         pack-refs           var
  fast-import         patch-id            verify-commit
  fetch               prune               verify-pack
  fetch-pack          prune-packed        verify-tag
  filter-branch       pull                web--browse
  fmt-merge-msg       push                whatchanged
  for-each-ref        quiltimport         worktree
  format-patch        read-tree           write-tree
  fsck                rebase
  fsck-objects        rebase--helper

git commands available from elsewhere on your $PATH

  flow  lfs

'git help -a' and 'git help -g' list available subcommands and some
concept guides. See 'git help <command>' or 'git help <concept>'
to read about a specific subcommand or concept.
```

# git显示所有配置
> git config -l
```
$ git config
usage: git config [<options>]

Config file location
    --global              use global config file
    --system              use system config file
    --local               use repository config file
    -f, --file <file>     use given config file
    --blob <blob-id>      read config from given blob object

Action
    --get                 get value: name [value-regex]
    --get-all             get all values: key [value-regex]
    --get-regexp          get values for regexp: name-regex [value-regex]
    --get-urlmatch        get value specific for the URL: section[.var] URL
    --replace-all         replace all matching variables: name value [value_regex]
    --add                 add a new variable: name value
    --unset               remove a variable: name [value-regex]
    --unset-all           remove all matches: name [value-regex]
    --rename-section      rename section: old-name new-name
    --remove-section      remove a section: name
    -l, --list            list all
    -e, --edit            open an editor
    --get-color           find the color configured: slot [default]
    --get-colorbool       find the color setting: slot [stdout-is-tty]

Type
    --bool                value is "true" or "false"
    --int                 value is decimal number
    --bool-or-int         value is --bool or --int
    --path                value is a path (file or directory name)

Other
    -z, --null            terminate values with NUL byte
    --name-only           show variable names only
    --includes            respect include directives on lookup
    --show-origin         show origin of config (file, standard input, blob, command line)


issuser@ISS110002007825 MINGW64 /d/Git/notes (master)
$ git config -l
core.symlinks=false
core.autocrlf=true
core.fscache=true
color.diff=auto
color.status=auto
color.branch=auto
color.interactive=true
help.format=html
rebase.autosquash=true
http.sslcainfo=C:/Program Files/Git/mingw64/ssl/certs/ca-bundle.crt
http.sslbackend=openssl
diff.astextplain.textconv=astextplain
filter.lfs.clean=git-lfs clean -- %f
filter.lfs.smudge=git-lfs smudge -- %f
filter.lfs.process=git-lfs filter-process
filter.lfs.required=true
user.name=liuhaiyun214
user.email=liuhaiyun214@163.com
gui.encoding=utf-8
gui.recentrepo=D:/Git/GitTest
core.repositoryformatversion=0
core.filemode=false
core.bare=false
core.logallrefupdates=true
core.symlinks=false
core.ignorecase=true
remote.origin.url=git@github.com:Lxp1314/notes.git
remote.origin.fetch=+refs/heads/*:refs/remotes/origin/*
branch.master.remote=origin
branch.master.merge=refs/heads/master
```

# 生成ssh-key
```
ssh-keygen -t rsa -C yourEmail
//然后一路回车
```

# 配置全局账号
```
git config --global user.name "Your Name"
git config --global user.email "Your Email"
```

# 本地创建一个空的仓库
```
//创建新文件夹mygit
mkdir mygit
//进入mygit
cd mygit
//初始化为新的仓库（还没有远程地址，只是一个本地的新的仓库）
git init
//查看修改了那些文件
git status
//将修改添加到暂存区
git add mygit.md
//将暂存区的修改提交到仓库
git commit -m "修改备注"
#可以多次将文件添加到暂存区，然后一次commit将多个add提交到仓库

//查看mygit.md的修改内容（本地与仓库中比较）
git diff mygit.md

//显示历史commit
git log
git log --pretty=oneline

git checkout -- file
//从最近一次git add或者git commit中检出文件file(会覆盖本地的修改，意思是本地的修改不要了，从git add或者git commit中把最近一次提交的修改拉取覆盖本地)

git rm test.md
//从仓库中移除test.md文件，例如我们把test.md改为test1.md，则需要先在本地重命名test.md为test1.md，然后git add test1.md，git rm test.md
```
