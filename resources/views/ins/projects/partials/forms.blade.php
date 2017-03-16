{{-- Update Project--}}
<div style="z-index: 20" class="popup-form update-project">
    <header>
        <p class="pull-left">更新项目</p>
        <div class="actions pull-right">
            <i title="Minimize" class="ion-minus-round"></i>
            <i title="Close" class="ion-close-round"></i>
        </div>
        <div class="clearfix"></div>
    </header>
    <section>
        <form>
            <span v-if="msg.success != null" class="status-msg success-msg">@{{ msg.success }}</span>
            <span v-if="msg.error != null" class="status-msg error-msg">@{{ msg.error }}</span>
            <div class="col-xs-12 no-side-padding">
                <label>名称:</label>
                <input v-model="project.name" type="text" class="form-control first">
            </div>
            <div class="col-xs-12 no-side-padding">
                <label>产品 Url:</label>
                <input v-model="project.production" type="text" class="form-control">
            </div>
            <div class="col-xs-12 no-side-padding">
                <label>开发 Url:</label>
                <input v-model="project.dev" type="text" class="form-control">
            </div>
            <div class="col-xs-12 no-side-padding">
                <label>Github (or other):</label>
                <input v-model="project.github" type="text" class="form-control">
            </div>
            <label>描述:</label>
            <textarea v-model="project.description" rows="5" class="form-control"></textarea>
            <br>
            <span class="count pull-right">@{{ 250 - project.description.length }}</span>
            <div class="clearfix"></div>
        </form>
    </section>
    <footer>
        <a v-on:click="updateProject()" href="" class="btn btn-primary pull-right">更新</a>
        <div class="clearfix"></div>
    </footer>
</div>
{{-- New Task--}}
<div style="z-index: 20" class="popup-form new-task">
    <header>
        <p class="pull-left">新任务</p>
        <div class="actions pull-right">
            <i title="Minimize" class="ion-minus-round"></i>
            <i title="Close" class="ion-close-round"></i>
        </div>
        <div class="clearfix"></div>
    </header>
    <section>
        <form>
            <span v-if="msg.success != null" class="status-msg success-msg">@{{ msg.success }}</span>
            <span v-if="msg.error != null" class="status-msg error-msg">@{{ msg.error }}</span>
            <div class="col-xs-12 no-side-padding">
                <label>名称:</label>
                <input v-model="newTask.name" type="text" class="form-control first">
            </div>
            <div class="col-xs-4 no-side-padding">
                <label>权重:</label>
                <select v-model="newTask.weight" class="form-control">
                    <option selected>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
            <div class="col-xs-4">
                <label>优先级:</label>
                <select v-model="newTask.priority" class="form-control">
                    <option>低</option>
                    <option selected>一般</option>
                    <option>中等</option>
                    <option>高</option>
                    <option>最高</option>
                </select>
            </div>
            <div class="col-xs-4 no-side-padding">
                <label>状态:</label>
                <select v-model="newTask.state" class="form-control">
                    <option>搁置中</option>
                    <option selected>进行中</option>
                    <option>测试中</option>
                    <option>已完成</option>
                </select>
            </div>
            <label>描述:</label>
            <textarea v-model="newTask.description" rows="5" class="form-control"></textarea>
            <br>
            <span class="count pull-right">@{{ 250 - newTask.description.length }}</span>
        </form>
    </section>
    <footer>
        <a v-on:click="createTask(project.client_id, project.id)" href="" class="btn btn-primary pull-right">保存</a>
        <div class="clearfix"></div>
    </footer>
</div>



{{-- Update Task--}}
<div style="z-index: 20" class="popup-form update-task">
    <header>
        <p class="pull-left">更新任务</p>
        <div class="actions pull-right">
            <i title="Minimize" class="ion-minus-round"></i>
            <i title="Close" class="ion-close-round"></i>
        </div>
        <div class="clearfix"></div>
    </header>
    <section>
        <form>
            <span v-if="msg.success != null" class="status-msg success-msg">@{{ msg.success }}</span>
            <span v-if="msg.error != null" class="status-msg error-msg">@{{ msg.error }}</span>
            <div class="col-xs-12 no-side-padding">
                <label>任务名称:</label>
                <input v-model="currentTask.name" type="text" class="form-control first">
            </div>
            <div class="col-xs-4 no-side-padding">
                <label>权重:</label>
                <select v-model="currentTask.weight" class="form-control">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                </select>
            </div>
            <div class="col-xs-4">
                <label>优先级:</label>
                <select v-model="currentTask.priority" class="form-control">
                    <option>低</option>
                    <option>一般</option>
                    <option>中等</option>
                    <option>高</option>
                    <option>最高</option>
                </select>
            </div>
            <div class="col-xs-4 no-side-padding">
                <label>任务状态:</label>
                <select v-model="currentTask.state" class="form-control">
                    <option>搁置中</option>
                    <option selected>进行中</option>
                    <option>测试中</option>
                    <option>已完成</option>
                </select>
            </div>
            <label>描述:</label>
            <textarea v-model="currentTask.description" rows="5" class="form-control"></textarea>
            <br>
            <span class="count pull-right">@{{ 250 - currentTask.description.length }}</span>
        </form>
    </section>
    <footer>
        <a v-on:click="updateTask(currentTask.id)" href="" class="btn btn-primary pull-right">更新</a>
        <div class="clearfix"></div>
    </footer>
</div>
{{-- Update Credential--}}
<div style="z-index: 20" class="popup-form update-credential">
    <header>
        <p class="pull-left">更新FTP</p>
        <div class="actions pull-right">
            <i title="Minimize" class="ion-minus-round"></i>
            <i title="Close" class="ion-close-round"></i>
        </div>
        <div class="clearfix"></div>
    </header>
    <section>
        <form>
            <span v-if="msg.success != null" class="status-msg success-msg">@{{ msg.success }}</span>
            <span v-if="msg.error != null" class="status-msg error-msg">@{{ msg.error }}</span>
            <div class="form-group">
                <label>名称:</label>
                <input v-model="currentCredential.name" type="text" class="form-control first">
            </div>
            <div class="form-group">
                <label>用户名:</label>
                <input v-model="currentCredential.username" type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>密码:</label>
                <input v-model="currentCredential.password" type="text" class="form-control">
            </div>
            <div v-if="currentCredential.type == 1" class="form-group">
                <label>主机号:</label>
                <input v-model="currentCredential.hostname" type="text" class="form-control">
            </div>
            <div v-if="currentCredential.type == 1" class="form-group">
                <label>端口:</label>
                <input v-model="currentCredential.port" type="text" class="form-control">
            </div>
            <br>
        </form>
    </section>
    <footer>
        <a v-on:click="updateCredential(currentCredential.id)" href="" class="btn btn-primary pull-right">更新</a>
        <div class="clearfix"></div>
    </footer>
</div>