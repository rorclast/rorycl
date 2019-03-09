export default class Site extends React.Component {

    constructor(props) {
        super(props)
        this.enter = this.enter.bind(this)

        this.state = {
            entered: false,
            titleStyle: {}
        }
    }

    enter(event) {
        event.preventDefault()

        this.setState({
            entered: true,
            titleStyle: {
                background: `url(star.png)`,
                backgroundSize: 'cover'
            }
        })
    }

    render() {
        return <div className="flex-center position-ref full-height">
            <div className="content" style={this.state.titleStyle}>
                <div className="title m-b-md">
                    rory.cl
                </div>

                { !this.state.entered ? (
                    <div className="links">
                        <a href="" onClick={this.enter}> Enter </a>
                    </div> 
                ) : (
                    <div className="links">
                        <a href="https://www.linkedin.com/in/rory-laster-857374a7"> LinkedIn </a>
                        <a href="https://github.com/rorclast"> GitHub </a>
                    </div>
                )}
            </div>
        </div>
    }

}