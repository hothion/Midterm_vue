<template>
    <div class="container-home">
        <div class="home">
            <ul>
            <li class="logout">LOGOUT</li>
            <li id="home">HOME</li>
            <li> <router-link to="/profile"> DISCOVERY </router-link></li>
            <li>PHOTOS</li>
            <li>CONTACT</li>
            <li> <router-link to="/login"> LOGIN</router-link></li>
            </ul>
        </div>
        <router-view></router-view>
    </div>
</template>
<script>
export default {

}
</script>
<style lang="css" scoped>
.container-home{
     background-image: url("/image/dd.png");
     width: 100%;
     height: 900px;
    background-repeat: no-repeat;
    background-size: cover;
}

ul li{
 list-style-type: none;
 margin-left: 2%;
}
ul{
    display: flex;
    width: 100%;
    background-color:whitesmoke;
}
.logout{
    color: #fa6980;
    font-weight: bold;
}
ul li{
    font-weight: bold;
}
#home{
    margin-left: 60%;
}
</style>
