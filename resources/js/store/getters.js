const getters = {

    loggedIn: state => {
        return !!state.user
    },
    campaign: state => {
        return state.campaign
    },

    dtmfTrue: state => {
        return state.dtmfTrue
    }
}

export default getters
