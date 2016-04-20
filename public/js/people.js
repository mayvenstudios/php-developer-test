Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('#token').getAttribute('value');

new Vue({
    el: '#peopleContainer',

    data: {
        newPeople: { name: '', email: '' },
        submitted: false
    },

    computed: {
        errors: function() {
            for (var key in this.newPeople) {
                if ( ! this.newPeople[key]) return true;
            }

            return false;
        }
    },

    ready: function() {
        this.fetchPeopleList();
    },

    methods: {
        fetchPeopleList: function() {
            this.$http.get('getPeopleList', function(peoplelist) {
                this.$set('peoplelist', peoplelist);
            });
        },

        onSubmitForm: function(e) {
            e.preventDefault();

            var people = this.newPeople;

            this.newPeople = { name: '', email: '' };
            this.submitted = true;

            this.$http.post('/people', people);
        }
    }
});
