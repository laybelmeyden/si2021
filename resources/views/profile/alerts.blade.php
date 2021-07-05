@if (session('status_title'))
<style>
  @media screen and (max-width:992px) {
            #modalflat .modal_alert__container {
                padding: 30px !important;
            }
        }
</style>
<div id="modalflat" class="modal_alert">
  <div class="modal_alert__container">
    <h4 class="alert_title">{{ session('status_title') }}</h4>
    <p class="alert_down">{{ session('status_body') }}</p>
    <a class="btn btn-primary btn_ok" role="button">
      Хорошо <img loading="lazy" src="/assets/img/right-arrow_si.svg" alt="">
    </a>
  </div>
</div>
<script>
  const btn_ok = document.querySelector('.btn_ok');
  const modalflat = document.querySelector('.modal_alert')
  const body = document.querySelector('body')
  body.classList.add('no_scroll')
  setTimeout(() => {
    if (!modalflat.classList.contains('hiddens__modal')) {
      modalflat.classList.toggle('hiddens__modal');
      body.classList.remove('no_scroll')
    }
  }, 15500)
  btn_ok.addEventListener('click', () => {
    document.querySelector(".modal_alert").classList.add('hiddens__modal');
    body.classList.remove('no_scroll')
  })
</script>
@endif