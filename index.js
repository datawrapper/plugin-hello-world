// yay I am the first JS plugin

module.exports = {
    // frontend hooks go here
    frontend() {

    },
    // api hooks go here
    api({router, models}) {

        const {Charts} = models;

        router.get('/', (req, res) => {
            Charts.findOne().then(chart => {
                res.status(200).send(chart.id);
            });

        });

        router.get('/hello', (req, res) => {
            res.status(200).send('world');
        });
    },
    // if the plugin defines crons, this
    // is the place to do it
    crons() {

    }
}
