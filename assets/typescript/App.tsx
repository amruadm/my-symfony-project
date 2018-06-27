import * as React from 'react';
import * as ReactDOM from "react-dom";
import {Component} from "react";

import TestComponent from "./TestComponent";
import DirViewer from "./DirViewer";

export default class App extends Component {
    render() {
        return (
            <div>
                <DirViewer />
            </div>
        );
    }
}

window.addEventListener('DOMContentLoaded', () => {
    ReactDOM.render(<App />, document.getElementById('app'));
});