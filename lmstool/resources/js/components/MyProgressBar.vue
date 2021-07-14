<template>
    <div>
        <div>
            <video ref="player">
                <source type="video/mp4" :src="src">
            </video>
        </div>
    </div>
</template>

<style> /* Note that this isn't scoped - we declare variables on the document root */
:root {
  --videoProgress: 1%;
}
</style>
<style lang="scss" module>
.controls {
  position: relative;
  z-index: 3;
  width: 100%;
  display: flex;
  flex-direction: row;
  flex-wrap: wrap;
  align-items: center;
  justify-content: space-between;
  .progress {
    height: 5px;
    appearance: none;
    margin: 0;
    width: 100%;
    border-left: 1px solid silver;
    border-right: 1px solid silver;
    &:focus {
      outline: none;
      &::-ms-fill-lower {
        background: linear-gradient(to right, silver 0%,silver var(--videoProgress),rgba(0,0,0,0) var(--videoProgress), rgba(0,0,0,0) 100%);
      }
      &::-ms-fill-upper {
        background-color: transparent;
      }
      &::-webkit-slider-runnable-track {
        background: linear-gradient(to right, silver 0%,silver var(--videoProgress),rgba(0,0,0,0) var(--videoProgress), rgba(0,0,0,0) 100%);
      }
    }
  
    &::-webkit-slider-runnable-track {
      width: 100%;
      height: 5px;
      cursor: pointer;
      animate: 0.2s;
      background: linear-gradient(to right, silver 0%,silver var(--videoProgress),rgba(0,0,0,0) var(--videoProgress), rgba(0,0,0,0) 100%);
    }
    &::-webkit-slider-thumb {
      height: 5px;
      width: 10px;
      background: green;
      cursor: pointer;
      appearance: none;
      margin-top: 0px;
    }
    &::-moz-range-track {
      width: 100%;
      height: 5px;
      cursor: pointer;
      animate: 0.2s;
      background: linear-gradient(to right, silver 0%,silver var(--videoProgress),rgba(0,0,0,0) var(--videoProgress), rgba(0,0,0,0) 100%);
    }
    &::-moz-range-thumb {
      height: 5px;
      width: 10px;
      background: green;
      cursor: pointer;
    }
    &::-ms-track {
      width: 100%;
      height: 5px;
      cursor: pointer;
      animate: 0.2s;
      background: transparent;
      border-color: transparent;
      color: transparent;
    }
    /* IE doesn't do custom properties, but does have separate background available for before/after the thumb */
    &::-ms-fill-lower {
      background: silver;
      border: 0px solid #000000;
    }
    &::-ms-fill-upper {
      background-color: transparent;
      border: 0px solid #000000;
    }
    &::-ms-thumb {
      margin-top: 1px;
      height: 5px;
      width: 10px;
      background: green;
      cursor: pointer;
    }
  }
}
</style>

<script>
export default {
  props: ['src'],
  mounted() {
    this.$refs.player.addEventListener('timeupdate', this.updateCurrentTime);
  },
  beforeDestroy() {
    this.$refs.player.removeEventListener('timeupdate', this.updateCurrentTime);
  },
  methods: {
    updateCurrentTime(ev) {
      const v = ev.target;
      document.documentElement.style.setProperty('--videoProgress', `${(v.currentTime / v.duration) * 100}%`);
    },
    seek(ev) {
      this.player.currentTime = ev.target.value;
    },
  },
  computed: {
    player() {
      if (this.$refs.player && this.$refs.player.readyState > 0) {
        return this.$refs.player;
      }
      // Return a stub to prevent errors
      return {
        currentTime: 0,
        duration: 0.1,
        readyState: 0,
        paused: true,
        ended: false,
      };
    },
  },
};
</script>

