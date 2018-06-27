import * as React from 'react';
import * as ReactDOM from 'react-dom';
import {Component} from 'react';
import {isBoolean} from "util";

interface DirViewerProps { }

interface DirViewerState {
    error: any;
    isLoaded: boolean;
    items: Array<string>;
}

export default class DirViewer extends Component<DirViewerProps, DirViewerState> {

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
            )
        ;
    }

    render() {
        return (
            <ul className="list-group">
                {this.state.items.map((item: any, index: any) => {
                    return <li className="list-group-item">{item}</li>
                })}
            </ul>
        );
    }
}
