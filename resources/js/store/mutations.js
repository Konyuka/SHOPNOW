const mutations = {
  addedToCart(state, data) {
    // state.cartItems = 1
    state.cartItems.push(data)
  },
  resetCart(state, data){
    state.cartItems = data
  }
};

export default mutations