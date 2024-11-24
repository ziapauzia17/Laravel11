document.addEventListener('DOMContentLoaded', function() {
  // Efek Typewriter untuk input email
  var emailTypingEffect = new Typed("#email", {
      strings: ["Enter your email"],
      typeSpeed: 100,
      backSpeed: 50,
      loop: true,
      attr: 'placeholder'
  });

  // Efek Typewriter untuk input password
  var passwordTypingEffect = new Typed("#password", {
      strings: ["Enter your password"],
      typeSpeed: 100,
      backSpeed: 50,
      loop: true,
      attr: 'placeholder'
  });

  // Hentikan efek pengetikan saat input email fokus
  document.getElementById('email').addEventListener('focus', function() {
      emailTypingEffect.stop();
      this.setAttribute('placeholder', '');
  });

  // Mulai lagi efek pengetikan jika input email kosong saat blur
  document.getElementById('email').addEventListener('blur', function() {
      if (this.value === '') {
          emailTypingEffect.start();
      }
  });

  // Hentikan efek pengetikan saat input password fokus
  document.getElementById('password').addEventListener('focus', function() {
      passwordTypingEffect.stop();
      this.setAttribute('placeholder', '');
  });

  // Mulai lagi efek pengetikan jika input password kosong saat blur
  document.getElementById('password').addEventListener('blur', function() {
      if (this.value === '') {
          passwordTypingEffect.start();
      }
  });
});
