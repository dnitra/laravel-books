 <nav>
     <a href="/">Home</a>
     <a href="about-us">About</a>
     <a href="register">Register</a>
     <a href="login">Login</a>



     <form action="{{ route('logout') }}" method="post">

         @csrf

         <button>Logout</button>

     </form>


 </nav>
