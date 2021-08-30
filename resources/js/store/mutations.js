const mutations = {
  updateCart(state, data) {
    state.cartItems = data
  },
  addedToCart(state, data) {
    // state.cartItems = 1
    state.cartItems.push(data)
  },
  resetCart(state, data){
    state.cartItems = data;
  },
  removeFromCart(state, data){
    var item = state.cartItems.find(x => x._id == data)
    state.cartItems.splice(state.cartItems.indexOf(item), 1);
  }
};

export default mutations