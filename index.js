// yay I am the first JS plugin

module.exports = {
    // frontend hooks go here
    frontend() {

    },
    // api hooks go here
    api({router, models}) {

        const {Chart} = models;

        router.get('/db', (req, res) => {

            Chart.findOne().then(chart => {
                res.status(200).send(chart.id);
            });

        });

        router.get('/error', (req, res) => {
            throw new Error('I am a bad plugin!');
        });

        router.get('/hello', (req, res) => {
            res.status(200).send('world');
        });
    },
    // if the plugin defines crons, this
    // is the place to do it
    crons({cron, config}) {
	cron.schedule('* * * * *', () => {
	    console.log(`[cron] hello ${config.plugin.name}`);
	});
    }
}
