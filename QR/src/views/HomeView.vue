<template>
  <section class="vh-100">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-6 text-black">

          <div class="vh-100 d-flex justify-content-center align-items-center h-custom-2 px-5 pt-5 pt-xl-0 mt-xl-n5">

            <form @submit.prevent="attemptLogin()" style="width: 23rem;">

              <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Dagorà Event Management</h3>
              <input type="hidden" name="required" v-model="form.honeypot">
              <div class="form-outline mb-4">
                <input type="text" id="username" class="form-control form-control-lg" v-model="form.username" />
                <label class="form-label" for="username">Username</label>
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="form2Example28" class="form-control form-control-lg" v-model="form.password" />
                <label class="form-label" for="form2Example28">Password</label>
              </div>

              <div class="pt-1 mb-4">
                <button class="btn btn-info btn-lg btn-block" style="background:rgba(245,116,185,1);border:none;" type="submit">Login</button>
              </div>

            </form>

          </div>

        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block vh-100" style="overflow:hidden; background-image: linear-gradient( 64.5deg,  rgba(245,116,185,1) 14.7%, rgba(89,97,223,1) 88.7% );">
          <svg xmlns="http://www.w3.org/2000/svg" class="ionicon home-deco" viewBox="0 0 512 512"><rect width="80" height="80" x="336" y="336" rx="8" ry="8"/><rect width="64" height="64" x="272" y="272" rx="8" ry="8"/><rect width="64" height="64" x="416" y="416" rx="8" ry="8"/><rect width="48" height="48" x="432" y="272" rx="8" ry="8"/><rect width="48" height="48" x="272" y="432" rx="8" ry="8"/><rect width="80" height="80" x="336" y="96" rx="8" ry="8"/><rect width="176" height="176" x="288" y="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" rx="16" ry="16"/><rect width="80" height="80" x="96" y="96" rx="8" ry="8"/><rect width="176" height="176" x="48" y="48" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" rx="16" ry="16"/><rect width="80" height="80" x="96" y="336" rx="8" ry="8"/><rect width="176" height="176" x="48" y="288" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" rx="16" ry="16"/></svg>
        </div>
      </div>
    </div>
  </section>
</template>

<script>
    export default {
        name: 'HomeView',
        data() {
            return {
                form: {
                    username: '',
                    password: '',
                    honeypot: ''
                }
            }
        },
        methods: {
          attemptLogin() {
              if (this.form.honeypot !== '' || !this.form.username || !this.form.password) {
                // Add some kind of error message
                return
              }
              // Use fetch to call login.php
              fetch('https://dagevman.hidora.com/Qrcodes/API/login.php', {
                method: 'POST',
                body: JSON.stringify(this.form)
              })
              .then(response => response.json())
              .then(data => {
                console.log(data)
                if (data.success) {
                  // Redirect to the dashboard
                  //this.$router.push({ name: 'dashboard' })
                } else {
                  // Add some kind of error message
                }
              })
            }
        }
    }
</script>
