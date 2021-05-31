<template>
  <div>
    <form
      @submit.prevent="setProjectFileLogo"
      id="project__form"
      enctype="multipart/form-data"
    >
      <label for="currenImg">Логотип профиля</label>
      <div class="btn__file">
        <div class="fileUploadInput">
          <input
            type="file"
            name="currenImg"
            id="currenImg"
            @change="setProjectFileLogo"
          />
          <button>ВЫБРАТЬ</button>
        </div>
        <div class="file__sizes">Максимальный размер файла 10 Мб</div>
        <div
          class="progress prg1"
          :val="fileProgressLogo"
          v-if="fileProgressLogo"
        >
          <div
            class="progress-bar"
            role="progressbar"
            :style="{ width: fileProgressLogo + '%' }"
          >
            <p>{{ fileProgressLogo + "%" }}</p>
          </div>
        </div>
        <div
          class="maxlength__inp"
          :class="{ danger: errorsLogo }"
          v-if="fileProgressLogo || fileCurrentLogo"
        >
          {{ fileCurrentLogo }}
        </div>
      </div>
    </form>
    <img
      :src="`/storage/${user.user_avatar}`"
      class="img-responsive"
      height="70"
      width="90"
    />
  </div>
</template>
<style lang="scss" scoped>
.btn__file {
  cursor: pointer;
  padding-top: 0 !important;
  .progress {
    height: 30px;
    margin-top: 10px;
    .progress-bar {
      background: #e30510;
      padding-top: 10px !important;
      display: flex;
      align-items: center;
      justify-content: center;
      position: relative;
      top: -39px;
      height: 38px;
      p {
        margin: 0;
        font-style: normal;
        font-weight: bold;
        font-size: 16px;
        line-height: 110%;
        color: white;
        padding-bottom: 10px;
      }
    }
  }
  .fileUploadInput {
    display: grid;
    grid-gap: 10px;
    position: relative;
    z-index: 1;
    background: white;
    border-radius: 10px;
    &:hover {
      filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.25));
    }
  }
  .file__sizes {
    font-family: Roboto;
    font-style: normal;
    font-weight: 300;
    font-size: 14px;
    line-height: 120%;
    color: #a6a6a6;
    text-align: right;
    padding-top: 7px !important;
    color: #e30510;
  }
  .fileUploadInput label {
    display: flex;
    align-items: center;
    color: setColor(primary, 0.5);
    background: setColor(white);
    transition: 0.4s ease;
    font-family: arial, sans-serif;
    font-size: 0.75em;
    font-weight: regular;
    border-radius: 10px;
  }
  .fileUploadInput input {
    cursor: pointer;
    position: relative;
    z-index: 1;
    background: transparent !important;
    border: 1px solid #cbcbcb !important;
    box-sizing: border-box !important;
    border-radius: 10px !important;
  }
  .fileUploadInput input[type="file"]::-webkit-file-upload-button {
    visibility: hidden;
    margin-left: 10px;
    padding: 0;
    height: 50px;
    width: 0;
  }
  .fileUploadInput button {
    cursor: pointer;
    position: absolute;
    right: 0;
    bottom: 0;
    width: 154px;
    height: 54px;
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 110%;
    border: none;
    text-align: center;
    letter-spacing: 0.2em;
    color: #ffffff;
    background: #e30510;
    border-radius: 10px;
  }
  .fileUploadInput button svg {
    width: auto;
    height: 50%;
  }
}
</style>
<script>
export default {
  data() {
    return {
      user: [],
      fileProgressLogo: 0,
      fileCurrentLogo: "",
    };
  },
  methods: {
    setProjectFileLogo(e) {
      const file = document.querySelector("#currenImg").files[0];
      const formData = new FormData();
      formData.append("currenImg", file);
      if (file != undefined) {
        if (file.size > 10000001) {
          (this.errorsLogo = true),
            (this.fileCurrentLogo = "Размер файла слишком большой");
        } else {
          axios
            .post("/update_user_avatar", formData, {
              onUploadProgress: (itemUpload) => {
                this.fileProgressLogo = Math.round(
                  (itemUpload.loaded / itemUpload.total) * 100
                );
                (this.errorsLogo = false),
                  (this.fileCurrentLogo = "Загрузка файла");
              },
            })
            .then((response) => {
              this.fileProgressLogo = 0;
              this.fileCurrentLogo = "";
            })
            .catch((error) => {
              alert(
                "Возникла ошибка. Перезагрузите страницу и попробуйте снова!"
              );
            });
        }
      }
    },
  },
  mounted() {
    axios
      .get("/api/allUserLogo", this.user)
      .then((response) => {
        this.user = response.data;
      })
      .finally(() => (this.loading = false));
  },
};
</script>

