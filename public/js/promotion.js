Vue.http.headers.common['X-CSRF-TOKEN'] = $("#token").attr("value");

new Vue({

  el: '#manage-vue',

  data: {
    promotions: [],
    pagination: {
        total: 0,
        per_page: 2,
        from: 1,
        to: 0,
        current_page: 1
      },
    offset: 4,
    formErrors:{},
    formErrorsUpdate:{},
    newPromotion : {'title':'','description':''},
    fillPromotion : {'title':'','description':'','expired_date':'','id':''}
  },

  computed: {
        isActived: function () {
            return this.pagination.current_page;
        },
        pagesNumber: function () {
            if (!this.pagination.to) {
                return [];
            }
            var from = this.pagination.current_page - this.offset;
            if (from < 1) {
                from = 1;
            }
            var to = from + (this.offset * 2);
            if (to >= this.pagination.last_page) {
                to = this.pagination.last_page;
            }
            var pagesArray = [];
            while (from <= to) {
                pagesArray.push(from);
                from++;
            }
            return pagesArray;
        }
    },

  ready : function(){
  		this.getVuePromotions(this.pagination.current_page);
  },

  methods : {

        getVuePromotions: function(page){
          this.$http.get('/vuepromotions?page='+page).then((response) => {
            this.$set('promotions', response.data.data.data);
            this.$set('pagination', response.data.pagination);
          });
        },

        createPromotion: function(){
		  var input = this.newPromotion;
		  this.$http.post('/vuepromotions',input).then((response) => {
		    this.changePage(this.pagination.current_page);
			this.newPromotion = {'title':'','description':''};
			$("#create-promotion").modal('hide');
			toastr.success('Promotion Created Successfully.', 'Success Alert', {timeOut: 5000});
		  }, (response) => {
			this.formErrors = response.data;
	    });
	},

      deletePromotion: function(promotion){
        this.$http.delete('/vuepromotions/'+promotion.id).then((response) => {
            this.changePage(this.pagination.current_page);
            toastr.success('Promotion Deleted Successfully.', 'Success Alert', {timeOut: 5000});
        });
      },

      editPromotion: function(promotion){
          this.fillPromotion.title = promotion.title;
          this.fillPromotion.id = promotion.id;
          this.fillPromotion.description = promotion.description;
          this.fillPromotion.expired_date = promotion.expired_date;
          $("#edit-promotion").modal('show');
      },

      updatePromotion: function(id){
        var input = this.fillPromotion;
        this.$http.put('/vuepromotions/'+id,input).then((response) => {
            this.changePage(this.pagination.current_page);
            this.fillPromotion = {'title':'','description':'','expired_date':'','id':''};
            $("#edit-promotion").modal('hide');
            toastr.success('Promotion Updated Successfully.', 'Success Alert', {timeOut: 5000});
          }, (response) => {
              this.formErrorsUpdate = response.data;
          });
      },

      changePage: function (page) {
          this.pagination.current_page = page;
          this.getVuePromotions(page);
      }

  }

});
