<template>
    <div class="container-login">
        <div class="form">
            <form @submit.prevent="onSubmit" method="post">
                <label for="username">Fullname</label><br/>
                <input type="text" name="First Name" v-model="fisrtname"   placeholder="Fisrt name..."><br/>
                <label for="username">Username</label><br/>
                <input type="text" name="Last name" v-model="lastname"   placeholder="Last Name..."><br/>
                <label for="username">Birthday</label><br/>
                <input type="text" name="birthday" v-model="birthday"   placeholder="Birthday.."><br/>
                <button type="submit">Update</button>
            </form>
        </div>

    </div>
</template>
<script>
</script>
