const mutations = {
  addedToCart(state, data) {
    state.cartItems.push(data)
  },
  addCartDetails(state, data){
    state.cartDetails = data
  }
};

export default mutations