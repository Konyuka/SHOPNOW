const mutations = {
  addCartDetails(state, data){
    state.cartDetails = data
    // state.cartDetails.description = data.description;
    // state.cartDetails.price = data.price;
    // state.cartDetails.title = data.title;
    // state.cartDetails.type = data.type;
  }
};

export default mutations