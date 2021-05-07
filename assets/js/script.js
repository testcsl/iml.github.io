// Vue.component('todo-item', {
//   template: '\
//     <li>\
//       {{ title }}\
//       <button v-on:click="$emit(\'remove\')">Remove</button>\
//     </li>\
//   ',
//   props: ['title']
// })

new Vue({
  el: "#app",
  data() {
    return {
      audio: null,
      circleLeft: null,
      barWidth: null,
      duration: null,
      currentTime: null,
      isTimerPlaying: false,
      // newTodoText: '',
      // todos: [
      //   {
      //     id: 1,
      //     title: 'Do the dishes',
      //   },
      //   {
      //     id: 2,
      //     title: 'Take out the trash',
      //   },
      //   {
      //     id: 3,
      //     title: 'Mow the lawn'
      //   }
      // ],
      tracks: [
        {
          id: "1",
          name: "Arrival directed",
          artist: "Denis Villeneuve",
          cover: "./assets/cover/arrival.webp",
          source: "./assets/music/arrival.mp3",
          url: "https://www.youtube.com/watch?v=a6RnT8uxOiw",
          favorited: true
        },
        {
          id: "2",
          name: "Genius ft. Sia, Diplo, Labrinth",
          artist: "LSD",
          cover: "./assets/cover/6.jpg",
          source: "./assets/music/6.mp3",
          url: "https://www.youtube.com/watch?v=HhoATZ1Imtw",
          favorited: false
        },
        {
          id: "3",
          name: "Everybody Knows",
          artist: "Leonard Cohen",
          cover: "./assets/cover/2.jpg",
          source: "./assets/music/2111.mp3",
          url: "https://www.youtube.com/watch?v=Lin-a2lTelg",
          favorited: false
        },
        {
          id: "4",
          name: "Rag'n'Bone Man",
          artist: "Human",
          cover: "./assets/cover/9.jpg",
          source: "./assets/music/mp3_9.mp3",
          url: "https://www.youtube.com/watch?v=L3wKzyIN1yk",
          favorited: false
        },
        {
          id: "5",
          name: "Mina",
          artist: "Christophe Rezai",
          cover: "./assets/cover/mina.jpg",
          source: "./assets/music/9.mp3",
          url: "#",
          favorited: false
        }
      ],
      currentTrack: null,
      currentTrackIndex: 0,
      transitionName: null
    };
  },
  methods: {
    
    // addNewTodo(){
    //   this.todos.push({
    //     id: this.nextTodoId++,
    //     title: this.newTodoText
    //   }) 
    //   this.newTodoText = ''
    // },
    play() {
      if (this.audio.paused) {
        this.audio.play();
        this.isTimerPlaying = true;
      } else {
        this.audio.pause();
        this.isTimerPlaying = false;
      }
      this.audio.volume = 0.1;
    },
    volume(){
      var x1 = document.getElementById("myText").value;
      console.log(x1);
      
      //   var slider = document.getElementById("myRange");
      //   var output = document.getElementById("demo");
      //   this.value = slider.oninput;
      // this.audio.volume = this.myVolume;
      // console.log(this.value1);
      // var slider = document.getElementById("myRange");
      // var output = document.getElementById("demo");
      // output.innerHTML = slider.value;
      // slider.oninput = function() {
      //   output.innerHTML = this.value;
      // this.myVolume = (this.value / 100);
      // console.log(this.value);
      // this.MyVolume = this.volume / 100;
      // this.myVolume = this.volume;
    // }
      this.audio.volume = 0;
    },
    generateTime() {
      let width = (100 / this.audio.duration) * this.audio.currentTime;
      this.barWidth = width + "%";
      this.circleLeft = width + "%";
      let durmin = Math.floor(this.audio.duration / 60);
      let dursec = Math.floor(this.audio.duration - durmin * 60);
      let curmin = Math.floor(this.audio.currentTime / 60);
      let cursec = Math.floor(this.audio.currentTime - curmin * 60);
      if (durmin < 10) {
        durmin = "0" + durmin;
      }
      if (dursec < 10) {
        dursec = "0" + dursec;
      }
      if (curmin < 10) {
        curmin = "0" + curmin;
      }
      if (cursec < 10) {
        cursec = "0" + cursec;
      }
      this.duration = durmin + ":" + dursec;
      this.currentTime = curmin + ":" + cursec;
    },
    updateBar(x) {
      let progress = this.$refs.progress;
      let maxduration = this.audio.duration;
      let position = x - progress.offsetLeft;
      let percentage = (100 * position) / progress.offsetWidth;
      if (percentage > 100) {
        percentage = 100;
      }
      if (percentage < 0) {
        percentage = 0;
      }
      this.barWidth = percentage + "%";
      this.circleLeft = percentage + "%";
      this.audio.currentTime = (maxduration * percentage) / 100;
      this.audio.play();
    },
    clickProgress(e) {
      this.isTimerPlaying = true;
      this.audio.pause();
      this.updateBar(e.pageX);
    },
    prevTrack() {
      this.transitionName = "scale-in";
      this.isShowCover = false;
      if (this.currentTrackIndex > 0) {
        this.currentTrackIndex--;
      } else {
        this.currentTrackIndex = this.tracks.length - 1;
      }
      this.currentTrack = this.tracks[this.currentTrackIndex];
      this.resetPlayer();
    },
    nextTrack() {
      this.transitionName = "scale-out";
      this.isShowCover = false;
      if (this.currentTrackIndex < this.tracks.length - 1) {
        this.currentTrackIndex++;
      } else {
        this.currentTrackIndex = 0;
      }
      this.currentTrack = this.tracks[this.currentTrackIndex];
      this.resetPlayer();
    },
    resetPlayer() {
      this.barWidth = 0;
      this.circleLeft = 0;
      this.audio.currentTime = 0;
      this.audio.src = this.currentTrack.source;
      setTimeout(() => {
        if(this.isTimerPlaying) {
          this.audio.play();
        } else {
          this.audio.pause();
        }
      }, 300);
    },
    favorite() {
      this.tracks[this.currentTrackIndex].favorited = !this.tracks[
        this.currentTrackIndex
      ].favorited;
    }
  },
  created() {
    let vm = this;
    this.currentTrack = this.tracks[0];
    this.audio = new Audio();
    this.audio.src = this.currentTrack.source;
    this.audio.ontimeupdate = function() {
      vm.generateTime();
    };
    this.audio.onloadedmetadata = function() {
      vm.generateTime();
    };
    this.audio.onended = function() {
      vm.nextTrack();
      this.isTimerPlaying = true;
    };

    // this is optional (for preload covers)
    for (let index = 0; index < this.tracks.length; index++) {
      const element = this.tracks[index];
      let link = document.createElement('link');
      link.rel = "prefetch";
      link.href = element.cover;
      link.as = "image"
      document.head.appendChild(link)
    }
  }
});