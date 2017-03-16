#!/usr/bin/env python
# -*- coding: utf-8 -*-

import requests
import re, hashlib

# 用户信息
USERNAME = 'a616625725'
PASSWORD = '1996922TZKrs'

# 会用到的URL们
LOGIN_URL = 'http://rs.xidian.edu.cn/member.php?mod=logging&action=login&loginsubmit=yes&infloat=yes&lssubmit=yes&inajax=1'
SIGNPAGE_URL = 'http://rs.xidian.edu.cn/plugin.php?id=dsu_paulsign:sign'
SIGN_URL = 'http://rs.xidian.edu.cn/plugin.php?id=dsu_paulsign:sign&operation=qiandao&infloat=1&inajax=1'

# Step 1. 登陆
session = requests.Session()    # 开启Session

PASSWORD_MD5 = hashlib.md5(PASSWORD).hexdigest()
login_post = { 'username': USERNAME, 'password': PASSWORD_MD5, 'quickforward': 'yes', 'handlekey': 'ls'}
login_res = session.post(LOGIN_URL, data=login_post)
if u"欢迎您回来" not in login_res.text:
    print "WA"
    exit()

# Step 2. 获取签到页面
signpage_res = session.get(SIGNPAGE_URL)
regx = '<input type="hidden" name="formhash" value="([a-z0-9]{8})">'
print signpage_res.text
formhash = re.search(regx.decode('utf-8'), signpage_res.text, re.I|re.U)
if not formhash:
    print "Already"
    exit()
else:
    formhash = formhash.group(1)

# Step 3. 伪造签到请求
sign_post = { 'formhash': formhash, 'qdxq': 'kx', 'qdmode': '3', 'todaysay': '', 'fastreplay': '' }
sign_res = session.post(SIGN_URL, sign_post)
if u"恭喜你签到成功" in sign_res.text:
    print "OK"
else:
    print "fail"
