<div class="row ">
    <div class="col-xs-12 col-md-6">
        <section>
            <form>
                <span v-if="msg.success != null" class="status-msg success-msg">@{{ msg.success }}</span>
                <span v-if="msg.error != null" class="status-msg error-msg">@{{ msg.error }}</span>
                <div class="form-group">
                    <label style="color: #000";>Email:</label>
                    <input v-model="invited.email" type="text" class="form-control first">
                </div>
                <br>
            </form>
        </section>
        <footer>
            <a v-on:click="inviteUser(project.id)" class="btn btn-primary pull-right" style="color: #000";>发送邀请</a>
            <div class="clearfix"></div>
        </footer>
    </div>
    <div class="col-xs-12 col-md-6">
        <label style="color: #000";>成员</label>
        <hr>
        <table class="table table-striped">
            <thead>
            <tr>
                <th style="color: #000";>#</th>
                <th style="color: #000";>名称</th>
                <th style="color: #000";>完成状态</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td style="color: #000";>1</td>
                <td style="color: #000";>@{{ owner.full_name }}</td>
                <td style="color: #000";><i class="ion-flag"></i></td>
            </tr>
            <tr v-for="member in members ">
                <td style="color: #000";>@{{ $index + 2 }}</td>
                <td style="color: #000";><a href="">@{{ member.full_name }}</a></td>
                <td style="font-size: 1.5em;color: #000">
                    <a title="Delete" v-on:click="removeMember(project.id, member)" style="color: #000";><i class="ion-ios-close-outline"></i></a>
                </td>
            </tr>
            </tbody>
        </table>
        <p></p>
    </div>
</div>