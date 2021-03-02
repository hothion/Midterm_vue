<template>
    <div class="container-login">
        <div class="form">
            <form @submit.prevent="onSubmit" method="post">
                <label for="username">Username</label><br/>
                <input type="text" name="username" v-model="username"   placeholder="User Name..."><br/>
                  <p class="text-red-500 text-xs italic" v-if="!!error.username">{{ error.username }}</p><br>
                <label for="username">Password</label><br/>
                <input type="password" name="password" v-model="password"   placeholder="Password..."><br/>
                <p class="text-red-500 text-xs italic" v-if="!!error.password">{{ error.password }}</p><br>
                <button type="submit">LOGIN</button>
            </form>
        </div>

    </div>
</template>
<script>
export default {
    data() {
        return {
             error: {},
             username: "",
             password: "",
             generalError: ""
        }
    },
      methods: {
        async onSubmit() {
            this.error = {};
            if (Object.keys(this.error).length) return;
            const data = {
                username: this.username,
                password: this.password
            }
            try {
                const response = await axios.post("/api/login", data);
                this.$emit("onUserChanged", response.data.user);
                alert("Login Successfully");
                this.$router.push({ path : '/profile' });
            } catch (e) {
                arlert("Login fail");
                this.generalError = e.response.data.error;
            }
        }
    }
}
</script>
<style lang="css">
    .container-login{
        width: 40%;
        position:relative;
    }
    .form{
        width: 80%;
        height: 500px;
        background-color: white;
        margin-left: 70%;
        margin-top: 20%;
    }
    form{
        padding-top:100px;
        margin-left: 20%;
    }
    form input{
        margin-top: 25px;
    }
    form label{
        margin-top: 25px;
        font-weight: bold;
    }
    form button{
        margin-top: 25px;
    }
    input{
        height: 50px;
        width: 80%;
        border-radius: 5px;
        border: 1px solid gainsboro;
    }
    button{
        border: none;
        color: white;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        -webkit-transition-duration: 0.4s; /* Safari */
        transition-duration: 0.4s;
        background-color: #fa6980;
    }
</style>