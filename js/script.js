function start(f) {
  /in/.test(document.readyState) ? setTimeout('start(' + f + ')', 9) : f();
}
start(function () {
  var app = new Vue({
    el: '#app',
    data() {
      return {
        valueName: '',
        valueService: '',
        valueEmail: '',
        valuePassword: '',
        default: 'В очереди',
        parents: [{
          img: 'img/doggie3.jpg',
          nickname: 'Белла',
          service: 'Педикюр',
          status: 'Готово!',
        },
        {
          img: 'img/doggie2.jpg',
          nickname: 'Бонни',
          service: 'Мытье',
          status: 'Готово!',
        },
        {
          img: 'img/kitty2.jpg',
          nickname: 'Рокки',
          service: 'Мытье',
          status: 'Готово!',
        },
        {
          img: 'img/doggie1.jpg',
          nickname: 'Атос',
          service: 'Стрижка',
          status: 'Готово!',
        },
        {
          img: 'img/kitty1.jpg',
          nickname: 'Матильда',
          service: 'Стрижка',
          status: 'Готово!'
        }
        ],
      }
    },
    methods: {
      inputName(event) {
        this.valueName = event.target.value;
      },
      inputService(event) {
        this.valueService = event.target.value;
      },
      submissionForm() {
        if (this.valueName === '' && this.valueService === '') {
          return
        };
        this.parents.push({
          nickname: this.valueName,
          service: this.valueService,
          status: this.default
        });
      },
      inputEmail(event) {
        this.valueEmail = event.target.value;
      },
      inputPassword(event) {
        this.valuePassword = event.target.value;
      },
      consoleConclusion() {
        console.log(`email: ${this.valueEmail} password: ${this.valuePassword}`);
      }
    }
  })
});