namespace ProjectRider.Controllers
{
    using System.Collections.Generic;
    using System.Linq;
    using System.Web.Mvc;
    using Models;

    [ValidateInput(false)]
    public class ProjectController : Controller
    {
        private ProjectRiderDbContext db = new ProjectRiderDbContext();

        [HttpGet]
        [Route("")]
        public ActionResult Index()
        {
            var projects = db.Projects.ToList();
            return View(projects);
        }

        [HttpGet]
        [Route("create")]
        public ActionResult Create()
        {
            return View();
        }

        [HttpPost]
        [Route("create")]
        [ValidateAntiForgeryToken]
        public ActionResult Create(Project project)
        {
            if (this.ModelState.IsValid)
            {
                db.Projects.Add(project);
                db.SaveChanges();
                return Redirect("/");

            }
            return View(project);
        }

        [HttpGet]
        [Route("edit/{id}")]
        public ActionResult Edit(int id)
        {
            var project = db.Projects.Find(id);
            if (project == null)
                return HttpNotFound();

            return View(project);
        }

        [HttpPost]
        [Route("edit/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult EditConfirm(int id, Project project)
        {
            var projectFromDb = db.Projects.Find(id);
            if (projectFromDb == null)
                return HttpNotFound();

            if (this.ModelState.IsValid)
            {
                projectFromDb.Title = project.Title;
                projectFromDb.Description = project.Description;
                projectFromDb.Budget = project.Budget;

                db.SaveChanges();

                return Redirect("/");
            }

            return View(project);
        }

        [HttpGet]
        [Route("delete/{id}")]
        public ActionResult Delete(int id)
        {
            var project = db.Projects.Find(id);
            if (project == null)
                return HttpNotFound();

            return View(project);
        }

        [HttpPost]
        [Route("delete/{id}")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirm(int id)
        {
            var projectFromDb = db.Projects.Find(id);
            if (projectFromDb == null)
                return HttpNotFound();

            if (this.ModelState.IsValid)
            {
                db.Projects.Remove(projectFromDb);
                db.SaveChanges();
            }

            return Redirect("/");
        }
    }
}