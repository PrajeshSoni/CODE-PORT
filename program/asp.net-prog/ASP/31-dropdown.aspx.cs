using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;

public partial class _31_dropdown : System.Web.UI.Page
{
    protected void Page_Load(object sender, EventArgs e)
    {
        if(!IsPostBack)
        {
            DropDownList1.Items.Add("mp");
            DropDownList1.Items.Add("gujarat");
            DropDownList1.Items.Add("up");
            DropDownList1.Items.Add("rajasthan");

        }
       
    }
    protected void DropDownList1_SelectedIndexChanged(object sender, EventArgs e)
    {
      if(DropDownList1.SelectedIndex==0)
      {
          Session["mp"] = DropDownList1.ToString();

          Response.Redirect("city.aspx?ct="+Session["mp"].ToString());
      }
      else if(DropDownList1.SelectedIndex==1)
      {
          Session["gujarat"] = DropDownList1.ToString();
          Response.Redirect("city.aspx?ct="+Session["gujarat"].ToString());
      }


    }
}