import { Destructible, Styleable } from '../types/interfaces/index';
import FilterizrOptions from '../FilterizrOptions/index';
import FilterContainer from '../FilterContainer';
import StyledSpinner from './StyledSpinner';
export default class Spinner implements Destructible, Styleable {
    private node;
    private styledNode;
    private filterContainer;
    constructor(filterContainer: FilterContainer, options: FilterizrOptions);
    readonly styles: StyledSpinner;
    destroy(): Promise<void>;
    private initialize;
}
