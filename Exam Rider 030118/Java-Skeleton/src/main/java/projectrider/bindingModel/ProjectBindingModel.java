package projectrider.bindingModel;

import javax.persistence.Column;
import javax.validation.constraints.NotNull;
import javax.validation.constraints.Size;

public class ProjectBindingModel {


    @NotNull
    @Size(min=1)
    private String title;

    @NotNull
    @Size(min=1)
    private String description;

    @NotNull
    private int budget;

    public String getTitle() {
        return title;
    }

    public void setTitle(String title) {
        this.title = title;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public int getBudget() {
        return budget;
    }

    public void setBudget(int budget) {
        this.budget = budget;
    }
}
