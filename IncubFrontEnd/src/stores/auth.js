
import { defineStore } from 'pinia'
import axios from "axios";
import router from "../router";



export const useUserStore = defineStore("auth", {
    state: () => ({
        authUser: null

    }),
    getters: {
        user: (state) => state.authUser,
        

    },
data(){
  return {
    token:user['tkoen']
  }
}
,
    actions:{
      token(){
        return token
      },
  
      checkstate() {
      
        var user=JSON.parse(localStorage.getItem('user'))
        var bol=0;
    
       if(user != null && (user['user'].role=='user' || user['user'].role=='sponsor' )){
        this.authUser=user
        return  user

       }
       else {

        this.authUser=false;
        // router.push('/login')

       return false
       }
        
      
    },
  
        getCategory:async  function () {
            try {
              const res =  await axios
                .get("http://127.0.0.1:8000/api/cat", {
                  headers: {
                    Accept: "application/json",
                    // Authorization: 'Bearer ' + user
                  },
                })
                .then((res) => res.data);
                // console.log(res);
                return res
            } catch (err) {
              this.error = err.message;
              console.log(err);
            }
 
          },
        

          getIdes:async  function () {
            try {
              const res =  await axios
                .get("http://127.0.0.1:8000/api/idea", {
                  headers: {
                    Accept: "application/json",
                    // Authorization: 'Bearer ' + token

                  },
                })
                .then((res) => res.data);
                // console.log(res);
                return res
            } catch (err) {
              this.error = err.message;
              console.log(err);
            }
          },
          
    }
})  

