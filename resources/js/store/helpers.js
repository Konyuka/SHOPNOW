import {mapGetters} from 'vuex'

const authComputed = {
    ...mapGetters(['loggedIn'])
}
export default authComputed
