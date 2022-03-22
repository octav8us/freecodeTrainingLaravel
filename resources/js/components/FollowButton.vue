<template>
<div>

    <div><button class="btn btn-primary mx-2" @click="FollowUser" v-text="buttonText"></button></div>

</div>
</template>

<script>

    export default {
        props:['userId','follows'],
        mounted() {
            console.log('Component mounted.')
        },
data :function (){
            return {status : this.follows}
},
        methods:{
            FollowUser(){
axios.post('/follow/'+ this.userId)
    .then( response=> {

        this.status = ! this.status;
    }).catch(errors => {
        if (errors.response.status == 401) {
            window.location = '/login';

        }
    }
);
        }
        }
        ,computed :{
            buttonText(){
                return (this.status) ? 'unfollow' : 'follow';
            }
        }
    }
</script>
