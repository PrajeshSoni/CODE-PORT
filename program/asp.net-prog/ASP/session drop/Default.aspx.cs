using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _Default : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if (!IsPostBack)
        {
            DropDownList1.Items.Add("--select state--");
            DropDownList1.Items.Add("gujarat");
            DropDownList1.Items.Add("up");
            DropDownList1.Items.Add("rajasthan");
        }
    }
    protected void DropDownList1_SelectedIndexChanged(object sender, EventArgs e)
    {
        Session["state"] = DropDownList1.SelectedValue;
            Response.Redirect("city.aspx");
        
    }
}