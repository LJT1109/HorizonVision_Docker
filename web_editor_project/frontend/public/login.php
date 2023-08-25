<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div id="app">
  <div class="container mt-5">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header">Login</div>
          <div class="card-body">
            <form @submit="login">
              <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" v-model="username" required>
              </div>
              <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" v-model="password" required>
              </div>
              <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="rememberMe" v-model="rememberMe">
                <label class="form-check-label" for="rememberMe">Remember Me</label>
              </div>
              <button type="submit" class="btn btn-primary">Login</button>
              <a href="#" class="ms-3">Forgot Password?</a>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/vue@2.6.14/dist/vue.js"></script>
<script>
  new Vue({
    el: '#app',
    data: {
      username: '',
      password: '',
      rememberMe: false
    },
    methods: {
      login(event) {
        event.preventDefault();
        // Perform login logic here.
        console.log('Username:', this.username);
        console.log('Password:', this.password);
        console.log('Remember Me:', this.rememberMe);
      }
    }
  });
</script>

</body>
</html>
