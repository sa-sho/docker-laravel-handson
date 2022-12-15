const riceCalculator = {
    data() {
      return {
        weight: 5,
        price: 2000,
        oneWeight: 180,
      };
    },
    computed: {
      calculate() {
        if (!this.weight) {
          return `買ったお米の量を入力してください。`;
        }
        if (!this.price) {
          return `値段を入力してください。`;
        }
        if (!this.oneWeight) {
          return `ごはん一食の量を入力してください。`;
        }
        const servings = Math.floor((this.weight * 1000 * 2.2) / this.oneWeight);
        const servingsPrice = Math.floor(this.price / servings);
        return `一食当たり約${servingsPrice}円、\n お茶碗${servings}杯分です。`;
      },
    },
  };
  
  Vue.createApp(riceCalculator).mount("#app");