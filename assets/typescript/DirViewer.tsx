import * as React from 'react';
import * as ReactDOM from 'react-dom';
import {Component} from 'react';
import {isBoolean} from "util";

export default class DirViewer extends Component {

    constructor(props: any) {
        super(props);
        this.state = {
            error: null,
            isLoaded: false,
            items: []
        };
    }

    componentDidMount() {
        fetch('/api/project/dir')
            .then(res => res.json())
            .then(
                (result) => {
                    this.setState({
                        isLoaded: true,
                        items: result
                    });
                },
                (error) => {
                    this.setState({
                        isLoaded: true,
                        error
                    })
                }
            );
    }

    render() {
        return (
            <div>

            </div>
        );
    }
}
