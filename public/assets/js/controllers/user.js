var userObj = new Vue({
    el: '#user',
    data: {
        user: {},
        delete_text: null,
        msg: {error: null, success: null},
    },

    ready: function(){
        this.getUser();
    },

    methods: {
        getUser: function(){
            $.get( window.baseurl + "/api/user", function( result ) {
                userObj.user = result;
            });
        },
        update: function(event){
            if(event !== undefined) {
                event.preventDefault();
            }

            var data = this.user;

            $.ajax({
                type: "POST",
                url: window.baseurl + "/api/user/"+data.id,
                data: data,
                success: function(result){
                    if(result.message != "您的改动已保存"){
                        userObj.msg.error = result.message;
                        userObj.msg.success = null;
                        return false;
                    }
                    userObj.msg.success = result.message;
                    userObj.msg.error = null
                },
                error: function(e){
                    // do nothing
                }
            });
        },
        delete: function(){
            showSheet();
            makePrompt("您确认要删除您的账号吗？","这项操作无法撤销","取消", "确定");

            $("#cancel-btn").click(function(){
                closePrompt();
            });

            $("#confirm-btn").click(function(){
                $.ajax({
                    type: "DELETE",
                    url: window.baseurl + "/api/user/",
                    success: function(result){
                        document.location.href="/";
                    },
                    error: function(e){
                        closePrompt();
                    }
                });
            });
        }
    }

});