<form class="credential-form new-credential">
    <span v-if="msg.success != null" class="status-msg success-msg">@{{ msg.success }}</span>
    <span v-if="msg.error != null" class="status-msg error-msg">@{{ msg.error }}</span>
    <div class="form-group">
        <label style="color: #000";>FTP/SSH</label> <input v-model="newCredential.type" type="radio" name="type" value="1">
        <label style="color: #000";>Other</label> <input v-model="newCredential.type" type="radio" name="type" value="0" checked>
    </div>
    <div class="form-group">
        <label style="color: #000";>连接名称</label>
        <input v-model="newCredential.name" class="form-control" type="text" name="name" placeholder="Name">
    </div>
    <div class="form-group">
        <label style="color: #000";>用户名</label>
        <input v-model="newCredential.username" class="form-control" type="text" name="username" placeholder="Username">
    </div>
    <div class="form-group">
        <label style="color: #000";>密码</label>
        <input v-model="newCredential.password" class="form-control" type="text" name="password" placeholder="Password">
    </div>
    <div class="form-group type-@{{ newCredential.type }}">
        <div class="col-xs-6 no-padding-left">
            <label style="color: #000";>主机地址</label>
            <input v-model="newCredential.hostname" class="form-control other" type="text" name="hostname" placeholder="Hostname">
        </div>
        <div class="col-xs-6 no-padding-right">
            <label style="color: #000";>端口</label>
            <input v-model="newCredential.port" class="form-control other" type="text" name="port" placeholder="Port">
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="form-group">
        <button v-on:click="createCredential(project.user_id, project.id)" class="btn btn-primary">保存</button>
    </div>
</form>
<hr>

<template v-if="project.credentials.length > 0">
    <table class="table table-striped">
        <thead><tr><th style="color: #000";>名称</th><th style="color: #000";>用户名</th><th style="color: #000";>密码</th><th style="color: #000";>主机地址</th><th style="color: #000";>端口</th><th style="color: #000";>完成状态</th></tr></thead>
        <tbody style="color: #000";>
            <tr v-for="credential in project.credentials">
                <td>@{{ credential.name }}</th>
                <td>@{{ credential.username }}</td>
                <td>@{{ credential.password }}</td>
                <td>@{{ credential.hostname }}</td>
                <td>@{{ credential.port }}</td>
                <td style="font-size: 1.5em">
                    <a title="Edit" v-on:click="editCredential(credential)"><i class="ion-ios-color-wand-outline"></i></a>
                    <a title="Delete" v-on:click="deleteCredential(credential)"><i class="ion-ios-close-outline"></i></a>
                </td>
            </tr>
        </tbody>
    </table>
</template>